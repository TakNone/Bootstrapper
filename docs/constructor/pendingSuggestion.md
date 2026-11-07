# pendingSuggestion

**Description** : *Represents a custom pending suggestion &raquo;*

**Layer** : 233

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
	suggestion : 'qtLvCOMcfr3Veoxi',
	title : $client->textWithEntities(
		text : 'YcrsSjBM4A9KhJlG',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 76,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 61,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 50,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 89,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 82,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 65,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 7,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 52,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 17,
				language : 'JpiPaNXMr5gGC3El',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 63,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 45,
				user_id : -3112046493382469280,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 50,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 8,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 66,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 50,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 40,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 25,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 92,
				document_id : 6719989451363900387,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 40,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 72,
				date : 13,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 1,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 29,
				old_text : 'TChVpD0YS2PqWsNv',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 19,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 64,
			),
		),
	),
	description : $client->textWithEntities(
		text : 'iOyw6vLuYcKFI5Ul',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 15,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 21,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 53,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 62,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 7,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 65,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 27,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 33,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 44,
				language : 'o1EaRWZBw45TUtqr',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 24,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 36,
				user_id : 2265187952762804112,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 35,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 54,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 23,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 49,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 39,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 20,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 95,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 9,
				document_id : 4013565338798562911,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 41,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 72,
				date : 23,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 80,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 27,
				old_text : '1MZrwoEIBJRh3CXV',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 68,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 19,
			),
		),
	),
	url : 'https://docs.liveproto.dev',
);
```