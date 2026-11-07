# messages.composeMessageWithAI

**Description** : *Invokes telegram&#039;s AI Editor that can translate, transform, fixup and/or emojify your message in a number of different ways, privately powered by Cocoon, see here &raquo; for more info\!*

**Layer** : 233

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
		text : 'RMsUvpwqyEKmlrGc',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 46,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 72,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 79,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 29,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 92,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 16,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 6,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 76,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 62,
				language : 'EbIDSwGUKCi52aFW',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 71,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : 4456789497753794976,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 39,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 10,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 23,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 72,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 72,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 97,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 40,
				document_id : -971957603055036054,
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
				length : 53,
				date : 48,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 66,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 11,
				old_text : 'ntK9gav5JkBypRW6',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 75,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 43,
			),
		),
	),
	translate_to_lang : 'UYFLS43QJjKNd9iH',
	tone : $client->inputAiComposeToneDefault(
		tone : 'WYZ5hGkLXFEp0B8u',
	),
);
```