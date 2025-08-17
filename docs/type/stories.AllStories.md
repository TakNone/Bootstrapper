# stories.AllStories

**Description** : *Full list of active (or active and hidden) stories*

**Layer** : 211

```tl
stories.allStoriesNotModified#1158fe3e flags:# state:string stealth_mode:StoriesStealthMode = stories.AllStories;
stories.allStories#6efc5e81 flags:# has_more:flags.0?true count:int state:string peer_stories:Vector<PeerStories> chats:Vector<Chat> users:Vector<User> stealth_mode:StoriesStealthMode = stories.AllStories;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**stories.allStoriesNotModified**](constructor/stories.allStoriesNotModified) | The list of active (or active and hidden) stories has not changed |
| [**stories.allStories**](constructor/stories.allStories) | Full list of active (or active and hidden) stories |