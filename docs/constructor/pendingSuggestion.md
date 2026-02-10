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
	suggestion : 'ZS42weyLd1kJs7WR',
	title : $client->textWithEntities(
		text : '67uTcN2PCoZU5n9M',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 79,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 89,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 36,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 53,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 29,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 80,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 53,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 63,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 68,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 56,
				language : 'QvqeSuCyb1g6aTAc',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 87,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 81,
				user_id : 5675736941437901718,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 83,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 88,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 65,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 72,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 7,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 50,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 43,
				document_id : 2382299027436464329,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 18,
			),
		),
	),
	description : $client->textWithEntities(
		text : 'uMQ34r0cTgtUZloN',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 29,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 33,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 13,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 73,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 96,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 37,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 12,
				language : 'f9Mkj3KBPTexZ2iG',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 92,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 56,
				user_id : 4986098564840903890,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 83,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 77,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 85,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 74,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 23,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 85,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 62,
				document_id : 8469269173950219284,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 78,
			),
		),
	),
	url : 'https://docs.liveproto.dev',
);
```