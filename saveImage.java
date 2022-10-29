	public void saveImage(String imageUrl, String destinationFile) throws Exception {
		
		URL url;
		InputStream is = null;
		OutputStream os = null;
			
			url = new URL(imageUrl);
			
			is = url.openStream();
			os = new FileOutputStream(destinationFile);

			byte[] b = new byte[2048];
			int length;

			while ((length = is.read(b)) != -1) {
				os.write(b, 0, length);
			}
			is.close();
			os.close();	
	}
