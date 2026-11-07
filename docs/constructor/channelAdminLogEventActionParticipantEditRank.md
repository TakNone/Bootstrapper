# channelAdminLogEventActionParticipantEditRank

**Description** : *A participant&#039;s tag &raquo; was changed*

**Layer** : 233

```tl
channelAdminLogEventActionParticipantEditRank#5806b4ec user_id:long prev_rank:string new_rank:string = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | The user ID |
| <mark>prev_rank</mark> | [`string`](type/string) | The previous tag |
| <mark>new_rank</mark> | [`string`](type/string) | The new tag |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantEditRank(
	user_id : 5401317546837795629,
	prev_rank : 'x5ZI0FHJSnNGvDzb',
	new_rank : 'fSzjwIgoalZd2sBx',
);
```