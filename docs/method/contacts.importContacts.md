# contacts.importContacts

**Description** : *Imports contacts: saves a full list on the server, adds already registered contacts to the contact list, returns added contacts and their info*

**Layer** : 229

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
			client_id : -2817113474541777829,
			phone : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			note : $client->textWithEntities(
				text : 'SHGn1BOLzXRcI7hm',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 4,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 45,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 15,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 51,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 1,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 61,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 56,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 78,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 39,
						language : 'rPXU3CSzNmnDqbJk',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 50,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 90,
						user_id : -1709607680089984891,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 74,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 43,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 79,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 57,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 40,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 7,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 74,
						document_id : -483047141315230067,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 24,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 88,
						date : 30,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 48,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 0,
						old_text : 'eLMZtWvs7b6lGw9u',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 22,
					),
				),
			),
		),
	),
);
```