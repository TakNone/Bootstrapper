# pendingSuggestion

**Description** : *Represents a custom pending suggestion &raquo;*

**Layer** : 229

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
	suggestion : '2b9WIcpCh1YXjrRK',
	title : $client->textWithEntities(
		text : '6T8sCn1KbPEx5Way',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 31,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 94,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 79,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 33,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 47,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 24,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 42,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 64,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 16,
				language : 'wtHFnDZKPequzYxf',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 8,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 39,
				user_id : 662774804870790575,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 17,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 34,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 50,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 49,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 36,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 19,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 72,
				document_id : -1983160759803429324,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 12,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 14,
				date : 48,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 43,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 65,
				old_text : 'vB69IXEl0p2hPwMt',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 82,
			),
		),
	),
	description : $client->textWithEntities(
		text : 'jnEtefkSlGxuJ6IX',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 95,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 46,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 22,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 86,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 66,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 19,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 12,
				language : 'aXJFiAdp7VxSbMz2',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 25,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 54,
				user_id : 5022360560442804700,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 84,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 82,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 30,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 91,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 6,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 96,
				document_id : -6283621564456329408,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 15,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 66,
				date : 88,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 16,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 82,
				old_text : 'bQehrlo7VOgmj68a',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 20,
			),
		),
	),
	url : 'https://docs.liveproto.dev',
);
```