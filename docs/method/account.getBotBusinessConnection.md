# account.getBotBusinessConnection

**Description** : *Bots may invoke this method to re\-fetch the updateBotBusinessConnect constructor associated with a specific business connection\_id, see here &raquo; for more info on connected business bots\.
This is needed for example for freshly logged in bots that are receiving some updateBotNewBusinessMessage, etc\. updates because some users have already connected to the bot before it could login\.
In this case, the bot is receiving messages from the business connection, but it hasn&#039;t cached the associated updateBotBusinessConnect with info about the connection \(can it reply to messages? etc\.\) yet, and cannot receive the old ones because they were sent when the bot wasn&#039;t logged into the session yet\.
This method can be used to fetch info about a not\-yet\-cached business connection, and should not be invoked if the info is already cached or to fetch changes, as eventual changes will automatically be sent as new updateBotBusinessConnect updates to the bot using the usual update delivery methods &raquo;*

**Layer** : 218

```tl
account.getBotBusinessConnection#76a86270 connection_id:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>connection_id</mark> | [`string`](type/string) | Business connection ID » |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CONNECTION_ID_INVALID** | `400` | The specified connection ID is invalid |

---

## Example

```php
$updates = $client->account->getBotBusinessConnection(
	connection_id : 'sbvz5hSClAFRY73q',
);
```