# webPageAttributeStory

**Description** : *Webpage preview of a Telegram story*

**Layer** : 211

```tl
webPageAttributeStory#2e94c3e7 flags:# peer:Peer id:int story:flags.0?StoryItem = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer that posted the story |
| <mark>id</mark> | [`int`](type/int) | Story ID |
| **story** | [`flags.0?StoryItem`](type/StoryItem) | May contain the story, if not the story should be fetched when and if needed using stories.getStoriesByID with the above id and peer |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeStory(
	peer : $client->peerUser(
		user_id : 3251557051996671577,
	),
	id : 95,
	story : $client->storyItemDeleted(
		id : 83,
	),
);
```