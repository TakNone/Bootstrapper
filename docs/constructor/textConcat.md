# textConcat

**Description** : *Concatenation of rich texts*

**Layer** : 233

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
			text : 'Wxq4rQbc1RGKelVa',
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
			webpage_id : 7168556568640188677,
		),
		$client->textEmail(
			text : $client->textEmpty(),
			email : 'reply@liveproto.dev',
		),
		$client->textConcat(
			texts : array(
				$client->textEmpty(),
				$client->textPlain(
					text : 'GDrR3qtZX1nU8AYj',
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
					webpage_id : 9048109821044437471,
				),
				$client->textEmail(
					text : $client->textEmpty(),
					email : 'reply@liveproto.dev',
				),
				$client->textConcat(
					texts : array(
						$client->textEmpty(),
						$client->textPlain(
							text : 'pwtum9fB1rnS7EWY',
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
							webpage_id : 2547387523846218509,
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
								$client->textMath(...),
								$client->textCustomEmoji(...),
								$client->textSpoiler(...),
								$client->textMention(...),
								$client->textHashtag(...),
								$client->textBotCommand(...),
								$client->textCashtag(...),
								$client->textAutoUrl(...),
								$client->textAutoEmail(...),
								$client->textAutoPhone(...),
								$client->textBankCard(...),
								$client->textMentionName(...),
								$client->textDate(...),
								$client->textDiff(...),
								$client->textButton(...),
								$client->textTonAddress(...),
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
							document_id : 7591621710102906484,
							w : 25,
							h : 62,
						),
						$client->textAnchor(
							text : $client->textEmpty(...),
							name : 'wgAmFEHqNQxh3YuX',
						),
						$client->textMath(
							source : 'jdMTQGiv5fq8Z1m4',
						),
						$client->textCustomEmoji(
							document_id : -4705120472964519888,
							alt : 'QwsmO10tA8p9T5JN',
						),
						$client->textSpoiler(
							text : $client->textEmpty(...),
						),
						$client->textMention(
							text : $client->textEmpty(...),
						),
						$client->textHashtag(
							text : $client->textEmpty(...),
						),
						$client->textBotCommand(
							text : $client->textEmpty(...),
						),
						$client->textCashtag(
							text : $client->textEmpty(...),
						),
						$client->textAutoUrl(
							text : $client->textEmpty(...),
						),
						$client->textAutoEmail(
							text : $client->textEmpty(...),
						),
						$client->textAutoPhone(
							text : $client->textEmpty(...),
						),
						$client->textBankCard(
							text : $client->textEmpty(...),
						),
						$client->textMentionName(
							text : $client->textEmpty(...),
							user_id : -1454702032381916292,
						),
						$client->textDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							text : $client->textEmpty(...),
							date : 41,
						),
						$client->textDiff(
							text : $client->textEmpty(...),
							old_text : $client->textEmpty(...),
						),
						$client->textButton(
							text : $client->textEmpty(...),
							type : $client->inlineButtonTypeUrl(...),
							style : $client->richButtonStyle(...),
						),
						$client->textTonAddress(
							text : $client->textEmpty(...),
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
					document_id : 1325969521911129941,
					w : 54,
					h : 87,
				),
				$client->textAnchor(
					text : $client->textEmpty(),
					name : 'WwsCEyXUJA3rOgoL',
				),
				$client->textMath(
					source : 'WGLRqFbtsup817Yx',
				),
				$client->textCustomEmoji(
					document_id : -7192095746687996548,
					alt : 'eMPyEZaNFV6SbJx5',
				),
				$client->textSpoiler(
					text : $client->textEmpty(),
				),
				$client->textMention(
					text : $client->textEmpty(),
				),
				$client->textHashtag(
					text : $client->textEmpty(),
				),
				$client->textBotCommand(
					text : $client->textEmpty(),
				),
				$client->textCashtag(
					text : $client->textEmpty(),
				),
				$client->textAutoUrl(
					text : $client->textEmpty(),
				),
				$client->textAutoEmail(
					text : $client->textEmpty(),
				),
				$client->textAutoPhone(
					text : $client->textEmpty(),
				),
				$client->textBankCard(
					text : $client->textEmpty(),
				),
				$client->textMentionName(
					text : $client->textEmpty(),
					user_id : 9041138682404195425,
				),
				$client->textDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					text : $client->textEmpty(),
					date : 87,
				),
				$client->textDiff(
					text : $client->textEmpty(),
					old_text : $client->textEmpty(),
				),
				$client->textButton(
					text : $client->textEmpty(),
					type : $client->inlineButtonTypeUrl(
						url : 'https://docs.liveproto.dev',
					),
					style : $client->richButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						link : true,
					),
				),
				$client->textTonAddress(
					text : $client->textEmpty(),
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
			document_id : -1511196341922930799,
			w : 91,
			h : 6,
		),
		$client->textAnchor(
			text : $client->textEmpty(),
			name : 'GXZD8K7xwJqF04u9',
		),
		$client->textMath(
			source : 'HXPNiYlqnOLrgvzB',
		),
		$client->textCustomEmoji(
			document_id : -4505328116098307270,
			alt : 'hAaqexX8ILWr3NQy',
		),
		$client->textSpoiler(
			text : $client->textEmpty(),
		),
		$client->textMention(
			text : $client->textEmpty(),
		),
		$client->textHashtag(
			text : $client->textEmpty(),
		),
		$client->textBotCommand(
			text : $client->textEmpty(),
		),
		$client->textCashtag(
			text : $client->textEmpty(),
		),
		$client->textAutoUrl(
			text : $client->textEmpty(),
		),
		$client->textAutoEmail(
			text : $client->textEmpty(),
		),
		$client->textAutoPhone(
			text : $client->textEmpty(),
		),
		$client->textBankCard(
			text : $client->textEmpty(),
		),
		$client->textMentionName(
			text : $client->textEmpty(),
			user_id : 8037562715137635445,
		),
		$client->textDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			text : $client->textEmpty(),
			date : 75,
		),
		$client->textDiff(
			text : $client->textEmpty(),
			old_text : $client->textEmpty(),
		),
		$client->textButton(
			text : $client->textEmpty(),
			type : $client->inlineButtonTypeUrl(
				url : 'https://docs.liveproto.dev',
			),
			style : $client->richButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				link : true,
			),
		),
		$client->textTonAddress(
			text : $client->textEmpty(),
		),
	),
);
```