# messages.composedMessageWithAI

**Description** : *Represents a message modified by AI*

**Layer** : 229

```tl
messages.composedMessageWithAI#90d7adfa flags:# result_text:TextWithEntities diff_text:flags.0?TextWithEntities = messages.ComposedMessageWithAI;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>result_text</mark> | [`TextWithEntities`](type/TextWithEntities) | The modified message |
| **diff_text** | [`flags.0?TextWithEntities`](type/TextWithEntities) | If only the proofreading mode (messages.composeMessageWithAI.proofread) is enabled, this field will be populated with a "pre-rendered" diff between the old and the new message text using only diff entities » |

---

## Type

[messages.ComposedMessageWithAI](type/messages.ComposedMessageWithAI)

---

## Example

```php
$messagesComposedMessageWithAI = $client->messages->composedMessageWithAI(
	result_text : $client->textWithEntities(
		text : 'pYyqU8vEjZHNX6wn',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 72,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 65,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 71,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 44,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 39,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 69,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 31,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 29,
				language : 'CwuAtkbz1H3eyi2R',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 2,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 90,
				user_id : 4187155425094793491,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 38,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 7,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 76,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 80,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 68,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 75,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 31,
				document_id : 6314117554443288992,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 92,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 99,
				date : 91,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 82,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 5,
				old_text : 'HJAZiEjahRQe8MNX',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 10,
			),
		),
	),
	diff_text : $client->textWithEntities(
		text : 'LaZUVruKi1GEndMO',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 58,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 4,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 38,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 86,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 2,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 29,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 97,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 52,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 24,
				language : 'YNp395WA0RX4tKbj',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 37,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 85,
				user_id : 338259078065568947,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 57,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 62,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 37,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 7,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 66,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 13,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 48,
				document_id : -8207987491169075672,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 18,
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
				date : 59,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 93,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 43,
				old_text : 'fnhsuEH5KQJ61a4i',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 51,
			),
		),
	),
);
```