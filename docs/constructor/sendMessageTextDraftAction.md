# sendMessageTextDraftAction

**Description** : *Used by bots to implement live message streaming &raquo;*

**Layer** : 233

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
	random_id : -8716723283868647710,
	text : $client->textWithEntities(
		text : 'msl9fI3c7ud0EJMK',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 54,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 13,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 69,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 28,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 14,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 92,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 62,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 17,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 89,
				language : 'OvPT9WboLdG1QXEz',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 51,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 14,
				user_id : 4802561531675681377,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 45,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 51,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 88,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 68,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 40,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 69,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 22,
				document_id : 4344089564899196380,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 16,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 70,
				date : 39,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 88,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 65,
				old_text : 'ECougI0VvGKFbO5S',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 66,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 56,
			),
		),
	),
);
```