# aiComposeToneExample

**Description** : *An example showing how an AI composer tone &raquo; rephrases a message, used as a preview in the tone picker*

**Layer** : 229

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
		text : 'wGza8yTm0l3bgMi4',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 8,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 82,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 89,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 96,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 40,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 35,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 76,
				language : 'Ki8tcLpSNFlYb2UJ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 0,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 35,
				user_id : 3033461317867858859,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 83,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 15,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 50,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 47,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 86,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 6,
				document_id : 6608939050323862648,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 88,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 84,
				date : 33,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 100,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 57,
				old_text : 'L3GvlUZBko7hzy2V',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 15,
			),
		),
	),
	to : $client->textWithEntities(
		text : 'feR1IuPmr6WD0p5q',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 81,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 53,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 95,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 80,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 70,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 81,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 21,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 5,
				language : 'u4DPL3jaz7wgVErx',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 99,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 11,
				user_id : -890202701352348952,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 20,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 64,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 78,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 42,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 30,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 63,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 73,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 47,
				document_id : -5543546641252170573,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 8,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 92,
				date : 7,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 44,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 55,
				old_text : 'nRLcNkjTZuovIYFJ',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 9,
			),
		),
	),
);
```