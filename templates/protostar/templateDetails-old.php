<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE install PUBLIC "-//Joomla! 2.5//DTD template 1.0//EN" "https://www.joomla.org/xml/dtd/2.5/template-install.dtd">
<extension version="3.1" type="template" client="site">
	<name>protostar</name>
	<version>1.0</version>
	<creationDate>4/30/2012</creationDate>
	<author>Kyle Ledbetter</author>
	<authorEmail>admin@joomla.org</authorEmail>
	<copyright>Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.</copyright>
	<description>TPL_PROTOSTAR_XML_DESCRIPTION</description>
	<files>
		<filename>component.php</filename>
		<filename>error.php</filename>
		<filename>offline.php</filename>
		<filename>favicon.ico</filename>
		<filename>index.php</filename>
		<filename>templateDetails.xml</filename>
		<filename>template_preview.png</filename>
		<filename>template_thumbnail.png</filename>
		<folder>css</folder>
		<folder>html</folder>
		<folder>images</folder>
		<folder>img</folder>
		<folder>js</folder>
		<folder>language</folder>
		<folder>less</folder>
	</files>
	<positions>
		<position>banner</position>
		<position>debug</position>
		<position>position-0</position>
		<position>position-1</position>
		<position>position-2</position>
		<position>position-3</position>
		<position>position-4</position>
		<position>position-5</position>
		<position>position-6</position>
		<position>position-7</position>
		<position>position-8</position>
		<position>position-9</position>
		<position>position-10</position>
		<position>position-11</position>
		<position>position-12</position>
		<position>position-13</position>
		<position>position-14</position>
		<position>footer</position>
	</positions>
	<languages folder="language">
		<language tag="en-GB">en-GB/en-GB.tpl_protostar.ini</language>
		<language tag="en-GB">en-GB/en-GB.tpl_protostar.sys.ini</language>
	</languages>
	<config>
		<fields name="params">
			<fieldset name="advanced">
				<field 
					name="templateColor" 
					type="color" 
					label="TPL_PROTOSTAR_COLOR_LABEL"
					description="TPL_PROTOSTAR_COLOR_DESC" 
					class="" 
					default="#08C"
				/>

				<field 
					name="templateBackgroundColor" 
					type="color" 
					label="TPL_PROTOSTAR_BACKGROUND_COLOR_LABEL"
					description="TPL_PROTOSTAR_BACKGROUND_COLOR_DESC" 
					class="" 
					default="#F4F6F7"
				/>

				<field 
					name="logoFile" 
					type="media" 
					label="TPL_PROTOSTAR_LOGO_LABEL"
					description="TPL_PROTOSTAR_LOGO_DESC" 
					class="" 
					default=""
				/>

				<field 
					name="sitetitle"  
					type="text" 
					label="JGLOBAL_TITLE"
					description="JFIELD_ALT_PAGE_TITLE_LABEL"
					default=""
					filter="string" 
				/>

				<field 
					name="sitedescription"  
					type="text" 
					label="JGLOBAL_DESCRIPTION"
					description="JGLOBAL_SUBHEADING_DESC"
					default=""
					filter="string" 
				/>

				<field 
					name="googleFont"
					type="radio"
					label="TPL_PROTOSTAR_FONT_LABEL"
					description="TPL_PROTOSTAR_FONT_DESC"
					class="btn-group btn-group-yesno"
					default="1"
					>
					<option value="1">JYES</option>
					<option value="0">JNO</option>
				</field>

				<field 
					name="googleFontName" 
					type="text" 
					label="TPL_PROTOSTAR_FONT_NAME_LABEL"
					description="TPL_PROTOSTAR_FONT_NAME_DESC" 
					class="" 
					default="Open+Sans"
					showon="googleFont:1" 
				/>

				<field 
					name="fluidContainer"
					type="radio"
					label="TPL_PROTOSTAR_FLUID_LABEL"
					description="TPL_PROTOSTAR_FLUID_DESC"
					class="btn-group btn-group-yesno"
					default="0"
					>
					<option value="1">TPL_PROTOSTAR_FLUID</option>
					<option value="0">TPL_PROTOSTAR_STATIC</option>
				</field>
			</fieldset>
		</fields>
	</config>
</extension>
