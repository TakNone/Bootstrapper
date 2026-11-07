# aiComposeToneExample

**Description** : *An example showing how an AI composer tone &raquo; rephrases a message, used as a preview in the tone picker*

**Layer** : 233

```tl
aiComposeToneExample#f1d628ec from:TextWithEntities to:TextWithEntities = AiComposeToneExample;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>from</mark> | [`TextWithEntities`](type/TextWithEntities) | The original, un-transformed sample message |
| <mark>to</mark> | [`TextWithEntities`](type/TextWithEntities) | The same sample message after being rephrased with this tone |

---

## Type

[AiComposeToneExample](type/AiComposeToneExample)

---

## Example

```php
$aiComposeToneExample = $client->aiComposeToneExample(
	from : $client->textWithEntities(
		text : 'zXKmSgOjE8xVYAb1',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 16,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 38,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 85,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 27,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 46,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 49,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 94,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 55,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 71,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 21,
				language : 'vTu8MR2AXEjbxJSO',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 43,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 12,
				user_id : -2849229810349880679,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 38,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 48,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 50,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 97,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 42,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 67,
				document_id : 4062234968655904997,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 58,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 2,
				date : 63,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 75,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 78,
				old_text : 'hHcvZFlnkXJjI7gG',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 89,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 83,
			),
		),
	),
	to : $client->textWithEntities(
		text : 'MfrvhuayIHP7wDgt',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 27,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 90,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 68,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 41,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 14,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 18,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 75,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 73,
				language : 'CyB1xPmRp89uMDVW',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 74,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 77,
				user_id : -166389991608899308,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 42,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 97,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 30,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 98,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 5,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 90,
				document_id : -5614993220362588898,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 9,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 45,
				date : 28,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 27,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 23,
				old_text : 'ynI0qXpAlYP8Wv1h',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 9,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 37,
			),
		),
	),
);
```