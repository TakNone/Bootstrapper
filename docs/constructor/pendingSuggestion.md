# pendingSuggestion

**Description** : *Represents a custom pending suggestion &raquo;*

**Layer** : 218

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
	suggestion : '5GYbBoXulR4zV7mc',
	title : $client->textWithEntities(
		text : 'CTRVenE8SYqjAuDK',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 100,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 13,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 50,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 39,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 5,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 43,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 79,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 60,
				language : 'Nfrv8CotqG5xFgHJ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 62,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 32,
				user_id : 5851613915545725968,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 52,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 88,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 17,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 28,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 52,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 95,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 62,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 21,
				document_id : -6377327746752037259,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 58,
			),
		),
	),
	description : $client->textWithEntities(
		text : 'fKqizZw1XU9OcEGb',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 59,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 100,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 77,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 61,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 80,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 93,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 34,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 76,
				language : '0LFW4fKysBqiIOow',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 30,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 49,
				user_id : -7420302582055390074,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 39,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 72,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 47,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 43,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 49,
				document_id : 5981850195822656443,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 83,
			),
		),
	),
	url : 'https://docs.liveproto.dev',
);
```