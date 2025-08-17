# UserProfilePhoto

**Description** : *Object contains info on the user's profile photo*

**Layer** : 211

```tl
userProfilePhotoEmpty#4f11bae1 = UserProfilePhoto;
userProfilePhoto#82d1f706 flags:# has_video:flags.0?true personal:flags.2?true photo_id:long stripped_thumb:flags.1?bytes dc_id:int = UserProfilePhoto;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**userProfilePhotoEmpty**](constructor/userProfilePhotoEmpty) | Profile photo has not been set, or was hidden |
| [**userProfilePhoto**](constructor/userProfilePhoto) | User profile photo |