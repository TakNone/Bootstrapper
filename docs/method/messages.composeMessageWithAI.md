# messages.composeMessageWithAI

**Layer** : 227

```tl
messages.composeMessageWithAI#daecc589 flags:# proofread:flags.0?true emojify:flags.3?true text:TextWithEntities translate_to_lang:flags.1?string tone:flags.2?InputAiComposeTone = messages.ComposedMessageWithAI;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **proofread** | [`flags.0?true`](type/true) | NOTHING |
| **emojify** | [`flags.3?true`](type/true) | NOTHING |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |
| **translate_to_lang** | [`flags.1?string`](type/string) | NOTHING |
| **tone** | [`flags.2?InputAiComposeTone`](type/InputAiComposeTone) | NOTHING |

---

## Result

[messages.ComposedMessageWithAI](type/messages.ComposedMessageWithAI)

---

## Example

```php
$messagesComposedMessageWithAI = $client->messages->composeMessageWithAI(
	proofread : true,
	emojify : true,
	text : $client->textWithEntities(
		text : '4QDlc190XvzoOSCL',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 13,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 26,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 26,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 3,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 49,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 59,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 97,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 24,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 31,
				language : 'PfHrsm04d9v6AOB2',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 4,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 54,
				user_id : 8964670857524246834,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 55,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 66,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 88,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 38,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 40,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 22,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 12,
				document_id : -762349386357019239,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 0,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 72,
				date : 35,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 33,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 51,
				old_text : 'LgEt3fc8KC1XdRZx',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 46,
			),
		),
	),
	translate_to_lang : 'S4NxtqlymMn6FLoH',
	tone : $client->inputAiComposeToneDefault(
		tone : '1fELZzGqnY6Qt4vN',
	),
);
```