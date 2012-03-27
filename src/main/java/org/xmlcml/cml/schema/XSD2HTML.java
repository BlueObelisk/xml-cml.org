package org.xmlcml.cml.schema;

import java.io.FileOutputStream;

import nu.xom.Builder;
import nu.xom.Document;
import nu.xom.Element;
import nu.xom.Nodes;
import nu.xom.xslt.XSLTransform;



public class XSD2HTML {

	private static Document STYLESHEET = null;
	static {
		try {
		STYLESHEET = new Builder().build("./schema/schema.xsl");
		} catch (Exception e) {
			throw new RuntimeException("bad stylesheet", e);
		}
	}

	public static void main(String[] args) throws Exception {
		if (args.length != 2) {
			usage();
		} else {
			XSLTransform t = new XSLTransform(STYLESHEET);
			Document doc = new Builder().build(args[0]);
			Nodes n = t.transform(doc);
			System.out.println(n.size());
			FileOutputStream fos = new FileOutputStream(args[1]);
			fos.write(((Element)n.get(0)).toXML().getBytes());
	}
}

	private static void usage() {
		System.out.println("Usage: input.xsd output.html");
	}
	}
