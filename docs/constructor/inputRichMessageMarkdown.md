# inputRichMessageMarkdown

**Layer** : 227

```tl
inputRichMessageMarkdown#9ac8186 flags:# rtl:flags.0?true noautolink:flags.1?true markdown:string photos:flags.2?Vector<InputPhoto> documents:flags.3?Vector<InputDocument> users:flags.4?Vector<InputUser> = InputRichMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **rtl** | [`flags.0?true`](type/true) | NOTHING |
| **noautolink** | [`flags.1?true`](type/true) | NOTHING |
| <mark>markdown</mark> | [`string`](type/string) | NOTHING |
| **photos** | [`flags.2?Vector<InputPhoto>`](type/InputPhoto) | NOTHING |
| **documents** | [`flags.3?Vector<InputDocument>`](type/InputDocument) | NOTHING |
| **users** | [`flags.4?Vector<InputUser>`](type/InputUser) | NOTHING |

---

## Type

[InputRichMessage](type/InputRichMessage)

---

## Example

```php
$inputRichMessage = $client->inputRichMessageMarkdown(
	rtl : true,
	noautolink : true,
	markdown : 'e1hBG7JFTmrt2Zag',
	photos : array(
		$client->inputPhotoEmpty(),
		$client->inputPhoto(
			id : 4149730111824168624,
			access_hash : 2935650734991185626,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	documents : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : 649915942625364275,
			access_hash : 4258972166503620435,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	users : array($client->get_input_user(user : '@TakNone')),
);
```