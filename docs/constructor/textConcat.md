# textConcat

**Description** : *Concatenation of rich texts*

**Layer** : 227

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
			text : 'VtBqUoWz8lLph0Qs',
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
			webpage_id : -5026883100570770474,
		),
		$client->textEmail(
			text : $client->textEmpty(),
			email : 'reply@liveproto.dev',
		),
		$client->textConcat(
			texts : array(
				$client->textEmpty(),
				$client->textPlain(
					text : 'CuGNsm2zTFXZB6Ad',
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
					webpage_id : -2580149193895146386,
				),
				$client->textEmail(
					text : $client->textEmpty(),
					email : 'reply@liveproto.dev',
				),
				$client->textConcat(
					texts : array(
						$client->textEmpty(),
						$client->textPlain(
							text : 'qgJwnp6E2874Mv3d',
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
							webpage_id : -5966954359359594746,
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
							document_id : 1732814515659546786,
							w : 63,
							h : 16,
						),
						$client->textAnchor(
							text : $client->textEmpty(...),
							name : '0OSRTfCkLzEU51wQ',
						),
						$client->textMath(
							source : '93dOlQokU5TDpGPy',
						),
						$client->textCustomEmoji(
							document_id : 6030050822151959875,
							alt : '8UI16eFr4s2VlvR7',
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
							user_id : -7738020249050512966,
						),
						$client->textDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							text : $client->textEmpty(...),
							date : 63,
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
					document_id : 4297080906726734924,
					w : 56,
					h : 68,
				),
				$client->textAnchor(
					text : $client->textEmpty(),
					name : '6DFnmzUrj8HTai32',
				),
				$client->textMath(
					source : 'VetTJnuhZ5LrH2jm',
				),
				$client->textCustomEmoji(
					document_id : -2505909101523477333,
					alt : 'cf7w4ZzuMJbxD9sU',
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
					user_id : -2332574200245833724,
				),
				$client->textDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					text : $client->textEmpty(),
					date : 46,
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
			document_id : -4544645652807016455,
			w : 5,
			h : 1,
		),
		$client->textAnchor(
			text : $client->textEmpty(),
			name : 'rL84YmMfGag2qnph',
		),
		$client->textMath(
			source : '7wxsL89PndazKkFH',
		),
		$client->textCustomEmoji(
			document_id : 3624294741651022194,
			alt : 'SF65a2eHy9idQqhs',
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
			user_id : 5952678588500356636,
		),
		$client->textDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			text : $client->textEmpty(),
			date : 41,
		),
	),
);
```