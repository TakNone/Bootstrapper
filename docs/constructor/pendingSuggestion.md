# pendingSuggestion

**Description** : *Represents a custom pending suggestion &raquo;*

**Layer** : 222

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
	suggestion : '2UtOuIADNwQB8q79',
	title : $client->textWithEntities(
		text : 'Ha0Lv4hAszGiluQt',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 44,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 61,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 28,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 49,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 22,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 5,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 43,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 66,
				language : 'mqA4jHEzkb0DdGr8',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 84,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 53,
				user_id : -7028922576429955435,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 14,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 55,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 0,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 55,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 58,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 26,
				document_id : 3591358426438088909,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 50,
			),
		),
	),
	description : $client->textWithEntities(
		text : 'hd7XQLyHG6lkIsj1',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 89,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 82,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 88,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 12,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 98,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 65,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 39,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 66,
				language : 'v2O5z3hRy7WbKFUQ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 30,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 79,
				user_id : -114577103655472847,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 98,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 47,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 3,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 58,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 57,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 46,
				document_id : -8401905928136686424,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 4,
			),
		),
	),
	url : 'https://docs.liveproto.dev',
);
```