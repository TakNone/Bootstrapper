# textConcat

**Description** : *Concatenation of rich texts*

**Layer** : 222

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
			text : '4Iv16ZNgmsuchBMl',
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
			webpage_id : 4888981806970086303,
		),
		$client->textEmail(
			text : $client->textEmpty(),
			email : 'reply@liveproto.dev',
		),
		$client->textConcat(
			texts : array(
				$client->textEmpty(),
				$client->textPlain(
					text : 'q20vndQWHBKj7Rt8',
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
					webpage_id : 209108521137187724,
				),
				$client->textEmail(
					text : $client->textEmpty(),
					email : 'reply@liveproto.dev',
				),
				$client->textConcat(
					texts : array(
						$client->textEmpty(),
						$client->textPlain(
							text : 'rLp0Nq3IdoFA4e5j',
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
							webpage_id : 8420951949366659223,
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
							document_id : -526700069926940277,
							w : 32,
							h : 30,
						),
						$client->textAnchor(
							text : $client->textEmpty(...),
							name : 'PIKz8MySrauFBDli',
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
					document_id : 7179217997562344318,
					w : 69,
					h : 76,
				),
				$client->textAnchor(
					text : $client->textEmpty(),
					name : 'uE4Zm8Qhn5W1IaqL',
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
			document_id : 5547947397977500129,
			w : 88,
			h : 79,
		),
		$client->textAnchor(
			text : $client->textEmpty(),
			name : 'gl3L4r0ZAuytKGEV',
		),
	),
);
```