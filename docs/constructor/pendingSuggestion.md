# pendingSuggestion

**Description** : *Represents a custom pending suggestion &raquo;*

**Layer** : 227

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
	suggestion : 'dUnZOcKMw08k3mph',
	title : $client->textWithEntities(
		text : 'z0UaQBlDPxCOdAgL',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 1,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 81,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 49,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 2,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 64,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 29,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 29,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 69,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 2,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 9,
				language : 'ToDFzLHZ8BiUCbSR',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 44,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 35,
				user_id : 887183117220502766,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 79,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 70,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 41,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 2,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 13,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 75,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 68,
				document_id : -3367099106194069393,
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
				length : 75,
				date : 77,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 67,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 69,
				old_text : 'c3KPRIHs8FgShiek',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 40,
			),
		),
	),
	description : $client->textWithEntities(
		text : 'q2ryknzX5DuxPhfG',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 52,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 52,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 59,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 53,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 11,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 4,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 48,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 35,
				language : 'SsjKiOLN0l3oUFqQ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 95,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 95,
				user_id : -1297298743344739996,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 92,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 51,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 8,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 69,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 68,
				document_id : 8144156589740251349,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 69,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 1,
				date : 59,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 27,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 46,
				old_text : 'pKVT5Xh19LkR2zcP',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 49,
			),
		),
	),
	url : 'https://docs.liveproto.dev',
);
```