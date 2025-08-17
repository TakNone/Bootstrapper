# stories.canSendStory

**Description** : *Check whether we can post stories as the specified peer*

**Layer** : 211

```tl
stories.canSendStory#30eb63f0 peer:InputPeer = stories.CanSendStoryCount;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer from which we wish to post stories |

---

## Result

[stories.CanSendStoryCount](type/stories.CanSendStoryCount)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOOSTS_REQUIRED** | `400` | The specified channel must first be boosted by its users in order to perform this action |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PREMIUM_ACCOUNT_REQUIRED** | `400` | A premium account is required to execute this action |
| **STORIES_TOO_MUCH** | `400` | You have hit the maximum active stories limit as specified by the story_expiring_limit_* client configuration parameters: you should buy a Premium subscription, delete an active story, or wait for the oldest story to expire |
| **STORY_SEND_FLOOD_MONTHLY_%d** | `400` | You've hit the monthly story limit as specified by the stories_sent_monthly_limit_* client configuration parameters: wait for the specified number of seconds before posting a new story |
| **STORY_SEND_FLOOD_WEEKLY_%d** | `400` | You've hit the weekly story limit as specified by the stories_sent_weekly_limit_* client configuration parameters: wait for the specified number of seconds before posting a new story |

---

## Example

```php
$storiesCanSendStoryCount = $client->stories->canSendStory(
	peer : $client->inputPeerEmpty(),
);
```