# pendingSuggestion

**Description** : *Represents a custom pending suggestion &raquo;*

**Layer** : 225

```tl
pendingSuggestion#e7e82e12 suggestion:string title:TextWithEntities description:TextWithEntities url:string = PendingSuggestion;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>suggestion</mark> | [`string`](type/string) | The suggestion ID, can be passed to help.dismissSuggestion |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | Title of the suggestion |
| <mark>description</mark> | [`TextWithEntities`](type/TextWithEntities) | Body of the suggestion |
| <mark>url</mark> | [`string`](type/string) | URL to open when the user clicks on the suggestion |

---

## Type

[PendingSuggestion](type/PendingSuggestion)

---

## Example

```php
$pendingSuggestion = $client->pendingSuggestion(
	suggestion : 'mOuY3Fcwa5sgkRbr',
	title : $client->textWithEntities(
		text : '4xlKuRi5dMpwn1fC',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 46,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 88,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 33,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 67,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 66,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 62,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 90,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 85,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 81,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 43,
				language : 'EQvqm3sD056hWpiJ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 19,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 18,
				user_id : 8385078115915004280,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 49,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 65,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 25,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 84,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 26,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 70,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 54,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 58,
				document_id : 7987498536414199674,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 32,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 31,
				date : 48,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 59,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 15,
				old_text : 'aBynoNHxiQRDXMbj',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 31,
			),
		),
	),
	description : $client->textWithEntities(
		text : 'td8o6gIiGJbCK1aL',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 21,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 64,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 27,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 69,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 22,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 11,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 68,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 58,
				language : 'Sf8TYvRCkbLQOExP',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 78,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 41,
				user_id : 673313551152082339,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 100,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 100,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 37,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 37,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 80,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 91,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 28,
				document_id : -1542535688871683713,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 57,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 100,
				date : 51,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 49,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 40,
				old_text : 'KFaoZr2ktGfC8S7h',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 6,
			),
		),
	),
	url : 'https://docs.liveproto.dev',
);
```