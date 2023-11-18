```python
import seaborn as sns
import matplotlib.pyplot as plt
from matplotlib.patches import Rectangle

# Sample data
iris = sns.load_dataset("iris")

# Create pair plot
g = sns.pairplot(iris)

# Get the axes of the pair plot
axes = g.axes

# Define the indices of the subplots you want to highlight
highlighted_indices = [(0, 1), (1, 2), (2, 3)]

# Draw red boxes around specific pair plots
for i, j in highlighted_indices:
    rect = Rectangle((axes[i, j].get_position().x0, axes[i, j].get_position().y0),
                     axes[i, j].get_position().width, axes[i, j].get_position().height,
                     linewidth=2, edgecolor='red', facecolor='none', transform=fig.transFigure)
    fig = plt.gcf()
    fig.patches.append(rect)

# Show the plot
plt.show()

```


    
![png](my_files/my_0_0.png)
    



```python

```
