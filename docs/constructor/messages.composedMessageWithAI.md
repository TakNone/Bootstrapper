# messages.composedMessageWithAI

**Description** : *Represents a message modified by AI*

**Layer** : 233

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
		text : 'qXuiVTR8rz6c7sje',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 60,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 52,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 49,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 41,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 52,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 58,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 54,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 54,
				language : 'cGF4iWxO6ISav8mb',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 71,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 84,
				user_id : -3922859956408092612,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 65,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 46,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 31,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 97,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 46,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 73,
				document_id : 6880762219177961107,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 91,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 3,
				date : 28,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 57,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 18,
				old_text : 'OPAG1U5n4bzcNgWZ',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 79,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 78,
			),
		),
	),
	diff_text : $client->textWithEntities(
		text : 'IO3YFyh8ZA2QHfou',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 43,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 41,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 38,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 94,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 54,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 20,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 38,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 26,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 54,
				language : 'hc1j5BqtlxuTzi80',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 8,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 68,
				user_id : -8725427312538075544,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 30,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 66,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 99,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 68,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 26,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 81,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 61,
				document_id : -5543785514518472339,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 80,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 95,
				date : 21,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 80,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 63,
				old_text : 'sf8Ml24dNSn0aWEw',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 67,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 70,
			),
		),
	),
);
```