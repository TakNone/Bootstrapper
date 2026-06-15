# inputRichMessageMarkdown

**Layer** : 227

```tl
inputRichMessageMarkdown#4b572c flags:# rtl:flags.0?true noautolink:flags.1?true markdown:string files:flags.2?Vector<InputRichFile> = InputRichMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **rtl** | [`flags.0?true`](type/true) | NOTHING |
| **noautolink** | [`flags.1?true`](type/true) | NOTHING |
| <mark>markdown</mark> | [`string`](type/string) | NOTHING |
| **files** | [`flags.2?Vector<InputRichFile>`](type/InputRichFile) | NOTHING |

---

## Type

[InputRichMessage](type/InputRichMessage)

---

## Example

```php
$inputRichMessage = $client->inputRichMessageMarkdown(
	rtl : true,
	noautolink : true,
	markdown : 'BV2SO8b4Q1qZTaHK',
	files : array(
		$client->inputRichFilePhoto(
			id : 'Gr5Axa9kZXIDcYFJ',
			photo : $client->inputPhotoEmpty(),
		),
		$client->inputRichFileDocument(
			id : 'rkx73M2neLzYuDGA',
			document : $client->inputDocumentEmpty(),
		),
	),
);
```