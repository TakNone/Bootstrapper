# recentMeUrlChatInvite

**Description** : *Recent t\.me invite link to a chat*

**Layer** : 218

```tl
recentMeUrlChatInvite#eb49081d url:string chat_invite:ChatInvite = RecentMeUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | t.me URL |
| <mark>chat_invite</mark> | [`ChatInvite`](type/ChatInvite) | Chat invitation |

---

## Type

[RecentMeUrl](type/RecentMeUrl)

---

## Example

```php
$recentMeUrl = $client->recentMeUrlChatInvite(
	url : 'https://docs.liveproto.dev',
	chat_invite : $client->chatInviteAlready(
		chat : $client->chatEmpty(
			id : 5442306534686696337,
		),
	),
);
```