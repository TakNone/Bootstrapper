# messages.composedMessageWithAI

**Layer** : 225

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
		text : 'PTwGbf7c5iRSlmUW',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 37,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 66,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 83,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 1,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 7,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 92,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 63,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 31,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 68,
				language : '1MI0nbU8y3eGH6r7',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 25,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 33,
				user_id : 7422528866683121927,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 20,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 96,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 2,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 48,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 63,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 39,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 55,
				document_id : -2399484142421912721,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 4,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 25,
				date : 66,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 37,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 93,
				old_text : 'KFwz2nmRbQydH6CE',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 89,
			),
		),
	),
	diff_text : $client->textWithEntities(
		text : 'aLDQPhZsogn0Txj3',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 78,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 93,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 27,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 86,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 93,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 31,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 49,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 33,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 18,
				language : 'Iehf5C17mQAORi23',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 83,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 83,
				user_id : -685827593020259824,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 85,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 66,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 68,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 89,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 73,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 92,
				document_id : 8905802050114786085,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 71,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 54,
				date : 32,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 53,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 66,
				old_text : 'lIXqLnyN8R1Qm4Dc',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 98,
			),
		),
	),
);
```