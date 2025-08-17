# textConcat

**Description** : *Concatenation of rich texts*

**Layer** : 211

```tl
textConcat#7e6260d7 texts:Vector<RichText> = RichText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>texts</mark> | [`Vector<RichText>`](type/RichText) | Concatenated rich texts |

---

## Type

[RichText](type/RichText)

---

## Example

```php
$richText = $client->textConcat(
	texts : array(
		$client->textEmpty(),
		$client->textPlain(
			text : 'ycObqaRf7UEdIH0h',
		),
		$client->textBold(
			text : $client->textEmpty(),
		),
		$client->textItalic(
			text : $client->textEmpty(),
		),
		$client->textUnderline(
			text : $client->textEmpty(),
		),
		$client->textStrike(
			text : $client->textEmpty(),
		),
		$client->textFixed(
			text : $client->textEmpty(),
		),
		$client->textUrl(
			text : $client->textEmpty(),
			url : 'https://docs.liveproto.dev',
			webpage_id : 57564835388792460,
		),
		$client->textEmail(
			text : $client->textEmpty(),
			email : 'reply@liveproto.dev',
		),
		$client->textConcat(
			texts : array(
				$client->textEmpty(),
				$client->textPlain(
					text : 'cBbMD31vqAFlzgSe',
				),
				$client->textBold(
					text : $client->textEmpty(...),
				),
				$client->textItalic(
					text : $client->textEmpty(...),
				),
				$client->textUnderline(
					text : $client->textEmpty(...),
				),
				$client->textStrike(
					text : $client->textEmpty(...),
				),
				$client->textFixed(
					text : $client->textEmpty(...),
				),
				$client->textUrl(
					text : $client->textEmpty(...),
					url : 'https://docs.liveproto.dev',
					webpage_id : 7513863249247334262,
				),
				$client->textEmail(
					text : $client->textEmpty(...),
					email : 'reply@liveproto.dev',
				),
				$client->textConcat(
					texts : array(
						$client->textEmpty(...),
						$client->textPlain(...),
						$client->textBold(...),
						$client->textItalic(...),
						$client->textUnderline(...),
						$client->textStrike(...),
						$client->textFixed(...),
						$client->textUrl(...),
						$client->textEmail(...),
						$client->textConcat(...),
						$client->textSubscript(...),
						$client->textSuperscript(...),
						$client->textMarked(...),
						$client->textPhone(...),
						$client->textImage(...),
						$client->textAnchor(...),
					),
				),
				$client->textSubscript(
					text : $client->textEmpty(...),
				),
				$client->textSuperscript(
					text : $client->textEmpty(...),
				),
				$client->textMarked(
					text : $client->textEmpty(...),
				),
				$client->textPhone(
					text : $client->textEmpty(...),
					phone : '+1234567890',
				),
				$client->textImage(
					document_id : 7455384441123224538,
					w : 93,
					h : 48,
				),
				$client->textAnchor(
					text : $client->textEmpty(...),
					name : 'lvhznx9ptRZA4S0B',
				),
			),
		),
		$client->textSubscript(
			text : $client->textEmpty(),
		),
		$client->textSuperscript(
			text : $client->textEmpty(),
		),
		$client->textMarked(
			text : $client->textEmpty(),
		),
		$client->textPhone(
			text : $client->textEmpty(),
			phone : '+1234567890',
		),
		$client->textImage(
			document_id : 2670239177784998459,
			w : 8,
			h : 69,
		),
		$client->textAnchor(
			text : $client->textEmpty(),
			name : '2xKQghycMIome3u9',
		),
	),
);
```