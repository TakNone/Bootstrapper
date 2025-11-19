# messages.translateResult

**Description** : *Translated text with entities*

**Layer** : 218

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
			text : 'vtin3jJhOD5eyEud',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 47,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 65,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 9,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 68,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 38,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 96,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 41,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 12,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 33,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 91,
					language : '3SxdaAuIoPk9lM6E',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 59,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 48,
					user_id : -7463596244872122830,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 46,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 59,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 95,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 89,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 28,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 14,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 8,
					document_id : 2238939967226997217,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 16,
				),
			),
		),
	),
);
```