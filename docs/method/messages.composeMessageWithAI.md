# messages.composeMessageWithAI

**Description** : *Invokes telegram&#039;s AI Editor that can translate, transform, fixup and/or emojify your message in a number of different ways, privately powered by Cocoon, see here &raquo; for more info\!*

**Layer** : 229

```tl
messages.composeMessageWithAI#daecc589 flags:# proofread:flags.0?true emojify:flags.3?true text:TextWithEntities translate_to_lang:flags.1?string tone:flags.2?InputAiComposeTone = messages.ComposedMessageWithAI;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **proofread** | [`flags.0?true`](type/true) | If set, proofreads and fixes mistakes in the message |
| **emojify** | [`flags.3?true`](type/true) | If set, adds emojis to the message |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | The message |
| **translate_to_lang** | [`flags.1?string`](type/string) | If set, translates the message to the specified language |
| **tone** | [`flags.2?InputAiComposeTone`](type/InputAiComposeTone) | If set, rephrases the message using the specified AI composer tone » |

---

## Result

[messages.ComposedMessageWithAI](type/messages.ComposedMessageWithAI)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **AICOMPOSE_FLOOD_PREMIUM** | `400` | You've reached the daily limit of AI text transformations, upgrade to Telegram Premium to get 50x times more AI text transformations per day! |
| **AICOMPOSE_TIMEOUT** | `500` | A timeout occurred while composing the message |
| **AI_COMPOSE_TASK_MISSING** | `400` | No AI task was specified. The caller must provide at least one of: proofread, translate (with a target language), tone, or emojify |
| **MESSAGE_EMPTY** | `400` | The provided message is empty |

---

## Example

```php
$messagesComposedMessageWithAI = $client->messages->composeMessageWithAI(
	proofread : true,
	emojify : true,
	text : $client->textWithEntities(
		text : 'DlqY7EPGz2BHcxFk',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 78,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 89,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 75,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 40,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 35,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 91,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 73,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 86,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 70,
				language : 'hAibXdMIQawB1esu',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 21,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 92,
				user_id : -3736257201772719802,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 58,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 42,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 38,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 86,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 47,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 75,
				document_id : -8947755689097709460,
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
				length : 97,
				date : 80,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 77,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 81,
				old_text : 'LNoGPAszUp7WCYRK',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 21,
			),
		),
	),
	translate_to_lang : '3GvHJO4LaMT0BrEu',
	tone : $client->inputAiComposeToneDefault(
		tone : 'udrKx5hs8MFVTzaq',
	),
);
```