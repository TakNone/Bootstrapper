# sendMessageTextDraftAction

**Layer** : 218

```tl
sendMessageTextDraftAction#376d975c random_id:long text:TextWithEntities = SendMessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[SendMessageAction](type/SendMessageAction)

---

## Example

```php
$sendMessageAction = $client->sendMessageTextDraftAction(
	random_id : 4737411458376996383,
	text : $client->textWithEntities(
		text : 'KjRtdHalrDu2sJPk',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 66,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 20,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 1,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 50,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 89,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 97,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 44,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 46,
				language : 'Ig0biQMLDvlwrNEn',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 34,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 55,
				user_id : -2616517654784729457,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 11,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 95,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 21,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 32,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 91,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 16,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 73,
				document_id : 6318738336472516508,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 91,
			),
		),
	),
);
```