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
	suggestion : 'R0mtHeINgyAxrpju',
	title : $client->textWithEntities(
		text : 'wKbjMxztk5PQWHoa',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 56,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 60,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 85,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 92,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 29,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 43,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 28,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 81,
				language : 'HftwkpREbYxcIeQa',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 23,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 21,
				user_id : 8554523644885208713,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 66,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 81,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 17,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 69,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 78,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 3,
				document_id : -5641903082972038515,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 70,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 30,
				date : 59,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 81,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 87,
				old_text : '2SkvIQjmr5tEUu6P',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 31,
			),
		),
	),
	description : $client->textWithEntities(
		text : 'HDLJ1FNVpUeb5oQI',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 10,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 49,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 89,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 36,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 42,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 56,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 72,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 82,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 30,
				language : 'twWNdoIkP9p3uKCc',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 69,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : 7962865702200925010,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 19,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 76,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 91,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 73,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 39,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 56,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 60,
				document_id : 501700591611063117,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 45,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 33,
				date : 2,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 30,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 7,
				old_text : '1quD6hrC7ZmgTAFp',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 38,
			),
		),
	),
	url : 'https://docs.liveproto.dev',
);
```