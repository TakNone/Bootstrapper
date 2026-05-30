# messages.composeMessageWithAI

**Layer** : 225

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
		text : 'HhM2G1k7uOrBUPlp',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 9,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 32,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 7,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 43,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 67,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 66,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 0,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 69,
				language : '4JgdpE8v6XuklhYS',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 42,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 3,
				user_id : -5528569958910620009,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 44,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 10,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 88,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 61,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 63,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 80,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 79,
				document_id : 6576154311458354180,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 61,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 26,
				date : 53,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 7,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 30,
				old_text : 'vRXmQNEy0Iu9Jsdn',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 88,
			),
		),
	),
	translate_to_lang : 'ICiS1fp8DTxsAhjr',
	tone : $client->inputAiComposeToneDefault(
		tone : 'vdYIqHMwgLPpCiRt',
	),
);
```