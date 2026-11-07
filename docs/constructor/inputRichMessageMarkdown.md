# inputRichMessageMarkdown

**Layer** : 233

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
	markdown : 'NO2SRlaMe3zYwmEb',
	files : array(
		$client->inputRichFilePhoto(
			id : 'zvc6uTpnN7W103XV',
			photo : $client->inputPhotoEmpty(),
		),
		$client->inputRichFileDocument(
			id : 'WUfTtS0XJqpINDnO',
			document : $client->inputDocumentEmpty(),
		),
	),
);
```