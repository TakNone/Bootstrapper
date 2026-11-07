# inputRichMessageHTML

**Layer** : 233

```tl
inputRichMessageHTML#dacb836a flags:# rtl:flags.0?true noautolink:flags.1?true html:string files:flags.2?Vector<InputRichFile> = InputRichMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **rtl** | [`flags.0?true`](type/true) | NOTHING |
| **noautolink** | [`flags.1?true`](type/true) | NOTHING |
| <mark>html</mark> | [`string`](type/string) | NOTHING |
| **files** | [`flags.2?Vector<InputRichFile>`](type/InputRichFile) | NOTHING |

---

## Type

[InputRichMessage](type/InputRichMessage)

---

## Example

```php
$inputRichMessage = $client->inputRichMessageHTML(
	rtl : true,
	noautolink : true,
	html : 'K8N9ZfeECYldOzc6',
	files : array(
		$client->inputRichFilePhoto(
			id : 'cWAxVfKuvs9RXDkl',
			photo : $client->inputPhotoEmpty(),
		),
		$client->inputRichFileDocument(
			id : 'CVPwS8ZaOszft40v',
			document : $client->inputDocumentEmpty(),
		),
	),
);
```