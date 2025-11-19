# stories.CanSendStoryCount

**Description** : *Contains the number of available active story slots \(equal to the value of the story\_expiring\_limit\_\* client configuration parameter minus the number of currently active stories\)*

**Layer** : 218

```tl
stories.canSendStoryCount#c387c04e count_remains:int = stories.CanSendStoryCount;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**stories.canSendStoryCount**](constructor/stories.canSendStoryCount) | Contains the number of available active story slots (equal to the value of the story_expiring_limit_* client configuration parameter minus the number of currently active stories) |