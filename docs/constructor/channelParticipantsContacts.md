# channelParticipantsContacts

**Description** : *Fetch only participants that are also contacts*

**Layer** : 211

```tl
channelParticipantsContacts#bb6ae88d q:string = ChannelParticipantsFilter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>q</mark> | [`string`](type/string) | Optional search query for searching contact participants by name |

---

## Type

[ChannelParticipantsFilter](type/ChannelParticipantsFilter)

---

## Example

```php
$channelParticipantsFilter = $client->channelParticipantsContacts(
	q : 's5tpecDv4xdzwI0G',
);
```