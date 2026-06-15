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
		text : 'xLqQDY3Wa6ecVfAm',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 26,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 31,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 67,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 92,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 69,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 94,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 66,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 19,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 9,
				language : 'gh5a1dV4mf6LXbHJ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 33,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 63,
				user_id : 2269361429647224610,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 86,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 46,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 29,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 30,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 62,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 63,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 97,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 69,
				document_id : 1426078992119263780,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 59,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 17,
				date : 96,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 55,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 53,
				old_text : 'U7vwI1CWxscgDkiG',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 93,
			),
		),
	),
	translate_to_lang : 'ZTxcNBebqWY6kzU9',
	tone : $client->inputAiComposeToneDefault(
		tone : 'tlBH2WDb6QceNzrh',
	),
);
```