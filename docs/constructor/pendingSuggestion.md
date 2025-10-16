# pendingSuggestion

**Description** : *Represents a custom pending suggestion &raquo;*

**Layer** : 216

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
	suggestion : 'oYsQDTFkRMXOPcSB',
	title : $client->textWithEntities(
		text : 'G06xPF41ps9dl3Mm',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 21,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 100,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 1,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 6,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 77,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 19,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 34,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 44,
				language : 'xvU9YsOajuKVo4n7',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 21,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 60,
				user_id : 8016016108991388328,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 78,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 27,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 43,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 90,
				document_id : 3048597187751741049,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 84,
			),
		),
	),
	description : $client->textWithEntities(
		text : 'JuKZYnGT6IzkB1Ud',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 43,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 29,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 97,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 52,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 69,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 32,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 36,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 72,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 87,
				language : 'CkNvfpmyMA0RHlcr',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 74,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 53,
				user_id : -8223611441328882566,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 56,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 12,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 54,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 8,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 10,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 87,
				document_id : -1582786345830581222,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 60,
			),
		),
	),
	url : 'https://docs.liveproto.dev',
);
```