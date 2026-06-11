# aiComposeToneExample

**Layer** : 227

```tl
aiComposeToneExample#f1d628ec from:TextWithEntities to:TextWithEntities = AiComposeToneExample;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>from</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |
| <mark>to</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[AiComposeToneExample](type/AiComposeToneExample)

---

## Example

```php
$aiComposeToneExample = $client->aiComposeToneExample(
	from : $client->textWithEntities(
		text : 'lAEYy2SZq3p9jJrL',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 87,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 88,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 36,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 21,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 56,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 3,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 41,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 97,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 98,
				language : 'sYVh7MSnzcD39WjG',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 23,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 20,
				user_id : 3384809560478378579,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 44,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 46,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 75,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 48,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 68,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 49,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 55,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 40,
				document_id : -6889105973914295205,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 24,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 37,
				date : 96,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 48,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 52,
				old_text : 'p3hJeudaSDW95184',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 75,
			),
		),
	),
	to : $client->textWithEntities(
		text : 'MTGds97xujHDvXYV',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 80,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 85,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 100,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 66,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 23,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 27,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 90,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 16,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 28,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 11,
				language : '8i5GFpToVtMaOHWy',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 25,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 2,
				user_id : -7115190284733146927,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 25,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 40,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 33,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 66,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 61,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 16,
				document_id : -8412417753287933632,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 34,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 4,
				date : 87,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 90,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 38,
				old_text : 'WchpDsk9eoqNIRFL',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 28,
			),
		),
	),
);
```