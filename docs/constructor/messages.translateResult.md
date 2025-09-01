# messages.translateResult

**Description** : *Translated text with entities*

**Layer** : 214

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
			text : '0Y8PJOota6zUAeWq',
			entities : array(
				$client->messageEntityUnknown(
					offset : 86,
					length : 3,
				),
				$client->messageEntityMention(
					offset : 83,
					length : 15,
				),
				$client->messageEntityHashtag(
					offset : 28,
					length : 99,
				),
				$client->messageEntityBotCommand(
					offset : 60,
					length : 13,
				),
				$client->messageEntityUrl(
					offset : 99,
					length : 44,
				),
				$client->messageEntityEmail(
					offset : 40,
					length : 56,
				),
				$client->messageEntityBold(
					offset : 3,
					length : 11,
				),
				$client->messageEntityItalic(
					offset : 33,
					length : 25,
				),
				$client->messageEntityCode(
					offset : 90,
					length : 94,
				),
				$client->messageEntityPre(
					offset : 55,
					length : 12,
					language : 'V9Zk3bnFsfr0J6MC',
				),
				$client->messageEntityTextUrl(
					offset : 54,
					length : 35,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 97,
					length : 53,
					user_id : -2369520218547823168,
				),
				$client->inputMessageEntityMentionName(
					offset : 2,
					length : 99,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 19,
					length : 68,
				),
				$client->messageEntityCashtag(
					offset : 34,
					length : 66,
				),
				$client->messageEntityUnderline(
					offset : 30,
					length : 25,
				),
				$client->messageEntityStrike(
					offset : 75,
					length : 52,
				),
				$client->messageEntityBankCard(
					offset : 94,
					length : 10,
				),
				$client->messageEntitySpoiler(
					offset : 46,
					length : 6,
				),
				$client->messageEntityCustomEmoji(
					offset : 62,
					length : 73,
					document_id : 112982203082205320,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 39,
					length : 11,
				),
			),
		),
	),
);
```