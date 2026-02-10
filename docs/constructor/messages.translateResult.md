# messages.translateResult

**Description** : *Translated text with entities*

**Layer** : 222

```tl
messages.translateResult#33db32f8 result:Vector<TextWithEntities> = messages.TranslatedText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>result</mark> | [`Vector<TextWithEntities>`](type/TextWithEntities) | Text+entities, for each input message |

---

## Type

[messages.TranslatedText](type/messages.TranslatedText)

---

## Example

```php
$messagesTranslatedText = $client->messages->translateResult(
	result : array(
		$client->textWithEntities(
			text : 'YEQ9T0PZUIqpGwvL',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 9,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 47,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 18,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 94,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 66,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 84,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 49,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 35,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 45,
					language : 'NrOyL9wSDPGCkxlV',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 25,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 1,
					user_id : -7301760980215624717,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 40,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 62,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 11,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 43,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 53,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 59,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 10,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 97,
					document_id : 3691882764289095151,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 89,
				),
			),
		),
	),
);
```