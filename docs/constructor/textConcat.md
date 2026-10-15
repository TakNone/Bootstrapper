# textConcat

**Description** : *Concatenation of rich texts*

**Layer** : 229

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
			text : 'SzIuGic4noKhECBX',
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
			webpage_id : 8625267274952058850,
		),
		$client->textEmail(
			text : $client->textEmpty(),
			email : 'reply@liveproto.dev',
		),
		$client->textConcat(
			texts : array(
				$client->textEmpty(),
				$client->textPlain(
					text : 'lN1OG2MtoV0Lkc4J',
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
					webpage_id : 2616381135644279013,
				),
				$client->textEmail(
					text : $client->textEmpty(),
					email : 'reply@liveproto.dev',
				),
				$client->textConcat(
					texts : array(
						$client->textEmpty(),
						$client->textPlain(
							text : 'X6rKotnkU2yGwVgB',
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
							webpage_id : -4465718481728380431,
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
							document_id : 1978391176878627578,
							w : 98,
							h : 81,
						),
						$client->textAnchor(
							text : $client->textEmpty(...),
							name : '42SVWYugREXlQynA',
						),
						$client->textMath(
							source : 'jEIRvkgPraZbt60o',
						),
						$client->textCustomEmoji(
							document_id : -4072907617951029540,
							alt : '01x9fKt2OAlG3SiT',
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
							user_id : 3631746500454684577,
						),
						$client->textDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							text : $client->textEmpty(...),
							date : 88,
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
					document_id : -4290833847478637270,
					w : 33,
					h : 10,
				),
				$client->textAnchor(
					text : $client->textEmpty(),
					name : 'cpXulZK6hCPvow4z',
				),
				$client->textMath(
					source : 'FXgzM9tS8AI5CVaK',
				),
				$client->textCustomEmoji(
					document_id : 5320158249192897901,
					alt : '6LEPOhNQjSqdexVK',
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
					user_id : 6769402439544931405,
				),
				$client->textDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					text : $client->textEmpty(),
					date : 15,
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
			document_id : -5959899456827196120,
			w : 19,
			h : 88,
		),
		$client->textAnchor(
			text : $client->textEmpty(),
			name : 'wsfnhcpO6rjyE3tS',
		),
		$client->textMath(
			source : 'PAVa9fuNhSH3FYXb',
		),
		$client->textCustomEmoji(
			document_id : 817795005333824167,
			alt : 'cqE7XYVyfKUbBPJF',
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
			user_id : -6112409099472779981,
		),
		$client->textDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			text : $client->textEmpty(),
			date : 62,
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
	),
);
```