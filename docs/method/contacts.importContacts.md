# contacts.importContacts

**Description** : *Imports contacts: saves a full list on the server, adds already registered contacts to the contact list, returns added contacts and their info*

**Layer** : 233

```tl
contacts.importContacts#2c800be5 contacts:Vector<InputContact> = contacts.ImportedContacts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>contacts</mark> | [`Vector<InputContact>`](type/InputContact) | List of contacts to import |

---

## Result

[contacts.ImportedContacts](type/contacts.ImportedContacts)

---

## Example

```php
$contactsImportedContacts = $client->contacts->importContacts(
	contacts : array(
		$client->inputPhoneContact(
			client_id : -2983334140172726463,
			phone : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			note : $client->textWithEntities(
				text : '8ocGB3YTIa5fAFu9',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 18,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 43,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 28,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 56,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 90,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 91,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 40,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 83,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 34,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 10,
						language : 'VaNbLYAPW3RJU72h',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 90,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 55,
						user_id : 1696059051768092040,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 41,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 22,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 2,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 38,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 74,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 58,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 12,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 55,
						document_id : 8618364382657601404,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 11,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 54,
						date : 7,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 16,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 3,
						old_text : '7wYZiMQGXBV0sDKL',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 52,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 78,
					),
				),
			),
		),
	),
);
```