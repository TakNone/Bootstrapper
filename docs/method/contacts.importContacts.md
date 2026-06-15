# contacts.importContacts

**Description** : *Imports contacts: saves a full list on the server, adds already registered contacts to the contact list, returns added contacts and their info*

**Layer** : 227

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
			client_id : 3814950748682927891,
			phone : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			note : $client->textWithEntities(
				text : 'Bmj9RosLK546pQcr',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 76,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 10,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 88,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 33,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 25,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 7,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 50,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 72,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 52,
						language : 'lXZmpLTV3vJeUb1Y',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 54,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 13,
						user_id : -1000662916427868344,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 8,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 90,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 48,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 32,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 99,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 62,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 45,
						document_id : 5895337712496524750,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 94,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 59,
						date : 78,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 28,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 26,
						old_text : 'aGXKz9fFCAxoUniL',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 34,
					),
				),
			),
		),
	),
);
```