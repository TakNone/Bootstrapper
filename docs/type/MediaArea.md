# MediaArea

**Description** : *Represents a story media area »*

**Layer** : 211

```tl
mediaAreaVenue#be82db9c coordinates:MediaAreaCoordinates geo:GeoPoint title:string address:string provider:string venue_id:string venue_type:string = MediaArea;
inputMediaAreaVenue#b282217f coordinates:MediaAreaCoordinates query_id:long result_id:string = MediaArea;
mediaAreaGeoPoint#cad5452d flags:# coordinates:MediaAreaCoordinates geo:GeoPoint address:flags.0?GeoPointAddress = MediaArea;
mediaAreaSuggestedReaction#14455871 flags:# dark:flags.0?true flipped:flags.1?true coordinates:MediaAreaCoordinates reaction:Reaction = MediaArea;
mediaAreaChannelPost#770416af coordinates:MediaAreaCoordinates channel_id:long msg_id:int = MediaArea;
inputMediaAreaChannelPost#2271f2bf coordinates:MediaAreaCoordinates channel:InputChannel msg_id:int = MediaArea;
mediaAreaUrl#37381085 coordinates:MediaAreaCoordinates url:string = MediaArea;
mediaAreaWeather#49a6549c coordinates:MediaAreaCoordinates emoji:string temperature_c:double color:int = MediaArea;
mediaAreaStarGift#5787686d coordinates:MediaAreaCoordinates slug:string = MediaArea;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**mediaAreaVenue**](constructor/mediaAreaVenue) | Represents a location tag attached to a story, with additional venue information |
| [**inputMediaAreaVenue**](constructor/inputMediaAreaVenue) | Represents a location tag attached to a story, with additional venue information |
| [**mediaAreaGeoPoint**](constructor/mediaAreaGeoPoint) | Represents a geolocation tag attached to a story |
| [**mediaAreaSuggestedReaction**](constructor/mediaAreaSuggestedReaction) | Represents a reaction bubble |
| [**mediaAreaChannelPost**](constructor/mediaAreaChannelPost) | Represents a channel post |
| [**inputMediaAreaChannelPost**](constructor/inputMediaAreaChannelPost) | Represents a channel post |
| [**mediaAreaUrl**](constructor/mediaAreaUrl) | Represents a URL media area |
| [**mediaAreaWeather**](constructor/mediaAreaWeather) | Represents a weather widget » |
| [**mediaAreaStarGift**](constructor/mediaAreaStarGift) | NOTHING |