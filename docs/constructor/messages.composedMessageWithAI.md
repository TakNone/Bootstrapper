# messages.composedMessageWithAI

**Layer** : 227

```tl
messages.composedMessageWithAI#90d7adfa flags:# result_text:TextWithEntities diff_text:flags.0?TextWithEntities = messages.ComposedMessageWithAI;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>result_text</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |
| **diff_text** | [`flags.0?TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[messages.ComposedMessageWithAI](type/messages.ComposedMessageWithAI)

---

## Example

```php
$messagesComposedMessageWithAI = $client->messages->composedMessageWithAI(
	result_text : $client->textWithEntities(
		text : 'kq9G3LUVlpvytTJS',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 90,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 46,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 28,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 6,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 30,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 50,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 13,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 64,
				language : 'Mtu1nbqHTWSDoPZh',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 23,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 42,
				user_id : 2021554509570361774,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 89,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 50,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 39,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 45,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 52,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 99,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 50,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 59,
				document_id : 6492728665370048731,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 51,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 29,
				date : 15,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 14,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 49,
				old_text : 'VlZtT1GQfNS9R6Hi',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 43,
			),
		),
	),
	diff_text : $client->textWithEntities(
		text : 'H7YzEs1t8XySMfhW',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 30,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 68,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 43,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 60,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 98,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 48,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 23,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 70,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 6,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 100,
				language : '5TZiny2YLQO8wbKH',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 30,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 19,
				user_id : 836469301018722246,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 44,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 52,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 55,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 44,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 42,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 46,
				document_id : 5846346429553572493,
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
				length : 6,
				date : 62,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 53,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 34,
				old_text : 'HvIyB13xMYCqrXjl',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 54,
			),
		),
	),
);
```