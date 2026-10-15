# sendMessageTextDraftAction

**Description** : *Used by bots to implement live message streaming &raquo;*

**Layer** : 229

```tl
sendMessageTextDraftAction#3630b85a flags:# can_stop:flags.0?true keep_on_stop:flags.1?true random_id:long text:TextWithEntities = SendMessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **can_stop** | [`flags.0?true`](type/true) | NOTHING |
| **keep_on_stop** | [`flags.1?true`](type/true) | NOTHING |
| <mark>random_id</mark> | [`long`](type/long) | Live draft ID: used by graphical clients to slightly change the rendering behavior, see here » for more info. See here » for more info on random ID deduplication and updateMessageID mapping |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | The contents of the live draft |

---

## Type

[SendMessageAction](type/SendMessageAction)

---

## Example

```php
$sendMessageAction = $client->sendMessageTextDraftAction(
	can_stop : true,
	keep_on_stop : true,
	random_id : -622401694386971901,
	text : $client->textWithEntities(
		text : 'ruyGNVsA2Tfmz57c',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 55,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 71,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 59,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 13,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 41,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 99,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 36,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 2,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 21,
				language : 'ln9NbhiGvMDRcpCV',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 94,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 88,
				user_id : -3273129635771842186,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 80,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 6,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 78,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 14,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 88,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 76,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 76,
				document_id : 5808685694870562010,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 28,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 11,
				date : 16,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 40,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 38,
				old_text : 'wEIMz9Hfu6UNhbFJ',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 44,
			),
		),
	),
);
```