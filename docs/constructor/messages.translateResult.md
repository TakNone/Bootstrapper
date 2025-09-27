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
			text : '7Z3fbjmk0LDl6rG8',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 31,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 81,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 27,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 8,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 24,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 93,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 84,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 59,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 19,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 78,
					language : '8l0kLVZ1eaS9Ep2M',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 18,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 21,
					user_id : 9169053730740133706,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 24,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 59,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 73,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 37,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 76,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 60,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 23,
					document_id : 6117909720732915271,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 24,
				),
			),
		),
	),
);
```