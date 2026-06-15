# inputRichMessageHTML

**Layer** : 227

```tl
inputRichMessageHTML#d4eab551 flags:# rtl:flags.0?true noautolink:flags.1?true html:string photos:flags.2?Vector<InputPhoto> documents:flags.3?Vector<InputDocument> users:flags.4?Vector<InputUser> = InputRichMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **rtl** | [`flags.0?true`](type/true) | NOTHING |
| **noautolink** | [`flags.1?true`](type/true) | NOTHING |
| <mark>html</mark> | [`string`](type/string) | NOTHING |
| **photos** | [`flags.2?Vector<InputPhoto>`](type/InputPhoto) | NOTHING |
| **documents** | [`flags.3?Vector<InputDocument>`](type/InputDocument) | NOTHING |
| **users** | [`flags.4?Vector<InputUser>`](type/InputUser) | NOTHING |

---

## Type

[InputRichMessage](type/InputRichMessage)

---

## Example

```php
$inputRichMessage = $client->inputRichMessageHTML(
	rtl : true,
	noautolink : true,
	html : '2v7oergEfnMJ8IFx',
	photos : array(
		$client->inputPhotoEmpty(),
		$client->inputPhoto(
			id : -9067036469853335592,
			access_hash : -7805973561297844429,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	documents : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : -6144426952019140887,
			access_hash : 7248430410261656345,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	users : array($client->get_input_user(user : '@TakNone')),
);
```